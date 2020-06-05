/**
 * Fonction permettant d'identifier et de renvoyer le premier mot le plus long d'une chaine de caractère
 * @param pString
 * @return string
 */
function longestWord(pString){
    // on explode le string
    var words = pString.split(' ');
    var longestWord = "";

    words.forEach(function(word){
        if(word.length > longestWord.length){
            longestWord = word;
        }
    })
    return longestWord;
}

longestWord("Hello world javascript");
longestWord("un deux trois quatre cinq six");
longestWord("pierre feuille ciseaux");