/**Problem '
we would like you to think of a single line of text, and justify that text into a buffer,
where the first character of the line of text is in the first spot in the buffer and the last character of text
is in the specified slot in the buffer.
Mariam Abdelmohsen
*/

//Class to Test Justifier line with adding "  " 2 space in between the words  
public class TestJustifier {

	/**
	 * @param args
	 */

	public static void main(String[] args) {
		System.out.println(justify("The quick brown fox jumps over the lazy dog.", 52));
		System.out.println("123456789012345678901234567890123456789012345678901234567890");

	}

	public static String justify(String text, int lineLength) {
		StringBuffer justifiedText = new StringBuffer();
		String[] words = text.split(" ");
		//Look For first word else add "  " 
		for (int i = 0; i < words.length; i++) {
			// first word on the line
			if (i == 0) {
				justifiedText.append(words[i]);
			} 
			else {
				justifiedText.append("  ");
				justifiedText.append(words[i]);
			}
		}
		return justifiedText.toString();
	}

}