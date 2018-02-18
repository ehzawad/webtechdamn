### GET is perhaps the simplest of these superglobal variables for passing data between PHP files or allowing the user to supply your PHP page with data.

### With this technique, we scrape data supplied at the URL which is stored in a query string consisting of key-value pairs, which are then stored in the $_GET associative array.

## $_GET is great for getting information to the page quickly, but can be problematic for passing sensitive information, as it makes it very easy for an attacker(or someone less malicious) to easily see that sensitive information.

## Unlike $_GET, using $_POST submits user information inside of the HTTP headers, instead of via the URL(You can see this in chrome using chrome developer tool)


