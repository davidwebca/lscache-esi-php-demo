# Simple LSCache compatible <esi:inline> demo with PHP

- The test.php file is the main request file
- The esi.php file would be the file that renders all the ESI blocks required

It appears that this demo doesn't work if we pass different cache control attributes to the <esi:include>, <esi:inline> and in the esi.php header. Which one is supposed to prevail if they're different? Right now, LSCache fails and renders an error message, so passing a variable to ensure the cache-control attributes are the same seems to be the best.