<?while($c=ord(fgetc(STDIN)))echo$c>96?ceil($c%96/3)+(($c==115|$c==118|$c>120)?0:1):'
';