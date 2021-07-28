# Mad_Lib_Functions
In this project, we’ll use PHP to write a function to fill in a Mad Libs story! Mad Libs are short stories with blank spaces, which get filled in by the user. The result is usually funny (or strange).

Mad Libs require:
    * A short story with blank spaces (asking for different types of words).
    * Words to fill in those blanks.
    
    For this project, we provide the story, but it will be up to you to create a function that:

1. Takes desired words as arguments.
2. Returns the story with the words put into blanks in the right place.

Let’s begin!

Create a Function
1. Create a function generateStory with three input parameters:
    * $singular_noun
    * $verb
    * $color
2. Within the function, create a variable $story and assign it the last stanza of Robert Frost’s “Stopping by Woods on a Snowy Evening”:

The woods are lovely, dark, and deep.
But I have promises to keep,
And miles to go before I sleep,
And miles to go before I sleep.

Use newlines (\n) to ensure the lines break in the right location. Also use one at the beginning and the end to help with formatting.
3. For now, before adding in the “blanks”, let’s return the story from the function.
4. After the function definition, echo three separate invocations of generateStory with unique inputs. Use a singular noun, a verb, and a color, like the function parameters describe.
5. So far, the function isn’t super useful, since it is returning the same story every time.

Within the function, change the $story string so that it parses the $singularNoun variable where the word wood currently is, $verb where the word sleep appears (both locations), and $color where dark appears.
6. Great! Now, let’s add one more parameter to our function and allow the word miles to be replaced with a $distance_unit when the function is called (both places).

Remember to update the calls to generateStory to add this extra argument.
7. Now our story is a bit more fun! If you like, replace the story with your own.

You could also try using PHP’s built in string replace function str_replace to simplify your code.
