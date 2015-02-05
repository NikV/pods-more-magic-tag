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

1. The first test would be if a user enterd the {@post_more} magic tag into a Pods template or between the [pods] shortcode. If the user has enterd the More tag somewhere in the Pods Post Type editor, then return anything that comes before the more tag. If the more tag is not entered, then read test #2. 
2. User still decides to use more tag without more tag, so we have to display the excerpt. If the excerpt is not found, lets go to the next test. 
3. No excerpt or more tag found? Then we don't return anything, the Pods post type template will not return anything from the magic tag. Test will assert that the result of the template was equal to the normal content as it was shown before. (Making sure not to mess with any other magic tags within the Pods Template.

Templates

1. (What returns from Test #1) lorem {@excerpt_read_more} impsum {@custom_field}, should not break any of the other things rendered in a template like the custom field
2. (What returns from test #2) lorem {@post_excerpt} impsum {@custom_field}, should not break anything else rendered in the template
3. (What returns from test #3) lorem impsum {@custom_field}, should not break anything else rendered in the template
