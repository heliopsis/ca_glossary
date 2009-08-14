CA Glossary Readme
==================


CA Glossary extension provides an operator that automatically identify word in XML Text based on a glossary.
Once identified, each word is replaced by a link to the Glossary and a descriptive box is added on hover.

Each item of the glossary is an object of a specific content type that has to be specified in the ini file.
Once the container of these glossary objects is defined, each XML Text given to ca_glossary() operator is
scanned and each match will replace the word by a specific template (ca_glossary.tpl).
The template can be adapted to your needs. The default template add a box on hover and a link to the glossary
page with an anchor on the name of the word.

You can specify tags that will prevent the system to match a word if he is surrounded by one of these tags.