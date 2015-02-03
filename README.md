# The Pods <!-- more --> Magic Tag

Scope: 

This plugin was created to add a magic tag that will display anything before the more tag if it exists within a post.

Goal: have it work in Pods, Posts, and any page template/Pods template. 

Confirmed in inital phase: Works with both Pods template and [pods] shortcode. No other issues found.

Needed:

- checking that the more tag exists
- checking that there are no problems with Pods templates

Conditionals 

The it being the Pods item passing through Pods template method
-  If it has a {@excerpt_read_more} tag and the post has the html for read more, replace {@excerpt_read_more} with the right html. - Test #1
-  If it has a {@excerpt_read_more} tag and the post does NOT have the html for read more, replace {@excerpt_read_more} with {@post_excerpt} - Test #2
-   If it does not have {@excerpt_read_more} do nothing. - Test #3


Tests
- Check if More Tag Exists
- If post does not have <! -- More --> tag, replace with excerpt
- If no excerpt, return stuff like normal. 

1. The first test would be if a user enterd the {@post_more} magic tag into a Pods template or between the [pods] shortcode. If the user has enterd the More tag somewhere in the Pods Post Type editor, then return anything that comes before the more tag. If the more tag is not entered, then read test #2. Test Will assert that excerpt more magic tag return anything beofre the more tag in a post (Not NULL)
2. User still decides to use more tag without more tag, so we have to display the excerpt. If the excerpt is not found, lets go to the next test. Test will assert that wthout the more tag, the magic tag will equal the post excerpt (not NULL)
3. No excerpt or more tag found? Then we don't return anything, the Pods post type template will not retrun anything from the magic tag. Test will assert that magic tag returns NULL.
