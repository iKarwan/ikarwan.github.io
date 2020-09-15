# Create Packages Files 
# Note: make sure to change line ending conversion/sequence to LF if running the script returns "rm: cannot remove 'Packages.bz2'$'\r': No such file or directory"
./dpkg-scanpackages -m . /dev/null > Packages
rm Packages.bz2
bzip2 -c9 Packages > Packages.bz2
