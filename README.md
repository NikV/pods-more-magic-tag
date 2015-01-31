# The Pods <!-- more --> Magic Tag

Scope: 

This plugin was created to add a magic tag that will display anything before the more tag if it exists within a post.

Goal: have it work in Pods, Posts, and any page template/Pods template. 

Needed:

- checking that the more tag exists
- checking that there are no problems with Pods templates

Conditionals 
-  If it has a {@excerpt_read_more} tag and the post has the html for read more, replace {@excerpt_read_more} with the right html.
-  If it has a {@excerpt_read_more} tag and the post does NOT have the html for read more, replace {@excerpt_read_more} with {@post_excerpt}
-   If it does not have {@excerpt_read_more} do nothing.

Tests
- 
