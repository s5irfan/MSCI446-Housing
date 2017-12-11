<?php
print("<html>\n");
print("<head>\n");
print("<title>Test php Page </title>\n");
print("</head>\n");
print("<body>\n");

for ($i=0; $i<10; ++$i)
{
    print("<p>".($i+1).".Hello!</p>\n");
}
print("</body>\n");
print("</html>\n");

?>