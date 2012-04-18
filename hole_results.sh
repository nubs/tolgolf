SHOW_RESULTS=
if [ $1 = "--show-results" ] 
then
	SHOW_RESULTS=1
	shift
fi

HOLE_NO=$1
HOLE_DIR=hole$HOLE_NO

for x in $HOLE_DIR/*
do
	[ -f $x/results.txt ] && echo $(cat $x/results.txt) $(printf "%03d" $(wc -c < $x/program.php)) $(basename $x)
done | sort -n > $HOLE_DIR/results_combined.txt

grep 'Passed' $HOLE_DIR/results_combined.txt | cut -f2- -d' ' > $HOLE_DIR/results_passed.txt
grep 'Failed' $HOLE_DIR/results_combined.txt | cut -f2- -d' ' > $HOLE_DIR/results_failed.txt

cat $HOLE_DIR/results_passed.txt | while read characters submission
do
	echo $characters, $(cat $HOLE_DIR/$submission/author.txt)
	[ $SHOW_RESULTS ] && cat $HOLE_DIR/$submission/program.php | sed 's/^/      /' && echo
done

echo
echo "INELIGIBLE SUMISSIONS"
cat $HOLE_DIR/results_failed.txt | while read characters submission
do
	echo $characters, $(cat $HOLE_DIR/$submission/author.txt)
	[ $SHOW_RESULTS ] && cat $HOLE_DIR/$submission/program.php | sed 's/^/      /' && echo
	echo
done
