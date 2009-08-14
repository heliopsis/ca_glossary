<?php
/* 

[GeneralSettings]
# The node_id of the content object that contains glossary definitions (can be of any content class you want)
GlossaryNodeID=180

# The content class identifier of your definitions object
DefinitionClassIdentifier=glossary_item

# The identifiers of attributes in the content class above
# Title is for the word to match in XML Texts (type: textline)
# Definition is the text bloc of the above word (type: textbloc)
TitleAttributeIdentifier=title
DefinitionAttributeIdentifier=definition

# List of tag that will prevent the system to match a word
# for example <h1> My glossary</h1> if glossary is a definition this will not match
# On the contrary, in <p> My glossary </p> a link will be added on glossary

ExceptionTags[]
ExceptionTags[]=h1
ExceptionTags[]=h2
ExceptionTags[]=h3
ExceptionTags[]=h4
ExceptionTags[]=h5
ExceptionTags[]=a

# Define a limit of replacement for each word. -1 is unlimited.
ReplacementLimit=-1

 */
?>
