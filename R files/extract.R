t require(twitteR)
Loading required package: twitteR
> require(RCurl)
Loading required package: RCurl
Loading required package: bitops
> ConsumerKey <-'xxxxxxxxxxx'
> ConsumerSecret <-'xxxxxxxxxxxxxxx'
> Access Token <- 'xxxxxxxxxxxxxxx'
Error: unexpected symbol in "Access Token"
> AccessToken <- 'xxxxxxxxxxxxxxx'
> AccessSecret <- 'xxxxxxxxxxxxxxx'
> setup_twitter_oauth(ConsumerKey, ConsumerSecret, AccessToken, AccessSecret)
[1] "Using direct authentication"
Use a local file to cache OAuth access credentials between R sessions?
1: Yes
2: No

Selection: 1
Error in check_twitter_oauth() : OAuth authentication error:
  This most likely means that you have incorrectly called setup_twitter_oauth()'
> check_twitter_oauth(ConsumerKey, ConsumerSecret, AccessToken, AccessSecret)
Error: could not find function "check_twitter_oauth"
> version
_                           
platform       x86_64-w64-mingw32          
arch           x86_64                      
os             mingw32                     
system         x86_64, mingw32             
status                                     
major          3                           
minor          2.3                         
year           2015                        
month          12                          
day            10                          
svn rev        69752                       
language       R                           
version.string R version 3.2.3 (2015-12-10)
nickname       Wooden Christmas-Tree       
> version(twitteR)
Error: could not find function "version"
> setup_twitter_oauth(ConsumerKey, ConsumerSecret, AccessToken=NULL, AccessSecret=NULL)
Error in setup_twitter_oauth(ConsumerKey, ConsumerSecret, AccessToken = NULL,  : 
unused arguments (AccessToken = NULL, AccessSecret = NULL)
> AccessToken <- '4732644389-luPr0iQEOd6INFlig4WqdOpW55NBAxJVjOpy3dW'
> setup_twitter_oauth(ConsumerKey, ConsumerSecret, AccessToken, AccessSecret)
[1] "Using direct authentication"
> 1
[1] 1
> EPL_tweets <- searchTwitter("EPL", n=10, lang="en")
> EPL_tweets
[[1]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/975svfOoxp"

[[2]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/fuA2JxjX2g"

[[3]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/c5s17D1fL7"

[[4]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/9ttWjvIZzY"

[[5]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/abcdOdHtfO"

[[6]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/RPBss2bLBS"

[[7]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/BxFN86DhjT"

[[8]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/LjqOfjDC5K"

[[9]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/DqGlfG2Jli"

[[10]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/VwexQ6Knaw"

> EPL_tweets[1:3]
[[1]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/975svfOoxp"

[[2]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/fuA2JxjX2g"

[[3]]
[1] "malissa_holmes: Hi There!! Find about west ham united via  https://t.co/ro42KVK5lb  https://t.co/c5s17D1fL7"

> require(tm)
Loading required package: tm
Loading required package: NLP
> require(wordcloud)
Loading required package: wordcloud
Loading required package: RColorBrewer
> mancity <- searchTwitter("Manchester+City", lang="en", n=500, resultType = "recent")
> mancity_text <- sapply(mancity, function(x) x$getText())
> str(mancity_text)
chr [1:500] "Morning! After yesterday's loss, Cam reflects on it with some interesting points... #NCFC https://t.co/1utjLZAORa https://t.co/"| __truncated__ ...
> macnity_corpus <- Corpus(VectorSource(mancity_text))
> mancity_corpus <- Corpus(VectorSource(mancity_text))
> mancity_corpus
<<VCorpus>>
  Metadata:  corpus specific: 0, document level (indexed): 0
Content:  documents: 500
> inspect(mancity_corpus[1])
<<VCorpus>>
  Metadata:  corpus specific: 0, document level (indexed): 0
Content:  documents: 1

[[1]]
<<PlainTextDocument>>
  Metadata:  7
Content:  chars: 137

> inspect(mancity_corpus[1])
<<VCorpus>>
  Metadata:  corpus specific: 0, document level (indexed): 0
Content:  documents: 1

[[1]]
<<PlainTextDocument>>
  Metadata:  7
Content:  chars: 137

> inspect(mancity_corpus[2])
<<VCorpus>>
  Metadata:  corpus specific: 0, document level (indexed): 0
Content:  documents: 1

[[1]]
<<PlainTextDocument>>
  Metadata:  7
Content:  chars: 100

> inspect(mancity_corpus[100])
<<VCorpus>>
  Metadata:  corpus specific: 0, document level (indexed): 0
Content:  documents: 1

[[1]]
<<PlainTextDocument>>
  Metadata:  7
Content:  chars: 140

> mancity_clean <- tm_map(mancity_corpus, removePunctuation)
> mancity_clean <- tm_map(mancity_clean, content_transformer(tolower))
> mancity_clean <- tm_map(mancity_clean, removeWords, stopwords("english"))
> mancity_clean <- tm_map(mancity_clean, removeNumbers)
> mancity_clean <- tm_map(mancity_clean, stripWhitespace)
> 
  > 
  > 
  > wordcloud(mancity_clean)
Error in plot.new() : figure margins too large
> wordcloud(mancity_clean, max.words = 10)
> wordcloud(mancity_clean, max.words = 50)
> wordcloud(mancity_clean, max.words = 100, col=rainbow((50)))
> wordcloud(mancity_clean, max.words = 50, col=rainbow((50)))
> wordcloud(mancity_clean, random.order=F, max.words = 50, col=rainbow((50)))
> wordcloud(mancity_clean, random.order=F, max.words = 50, colors=rainbow((50)))
> wordcloud(mancity_clean, max.words = 50, colors=rainbow((50)))
> wordcloud(mancity_clean, max.words = 50, colors=rainbow((50)))
> wordcloud(mancity_clean, max.words = 70, colors=rainbow((50)))
> wordcloud(mancity_clean, max.words = 70, colors=rainbow((30)))
> wordcloud(mancity_clean, max.words = 70, colors=rainbow((100)))
> wordcloud(mancity_clean, max.words = 20, col=rainbow((50)))
> wordcloud(mancity_clean, random.order=F, max.words = 40, col=rainbow((50)))
> wordcloud(mancity_clean, random.order=F, max.words = 40, col=rainbow((50)))
> wordcloud(mancity_clean, random.order=F, max.words = 40, col=rainbow((50)))
> wordcloud(mancity_clean, random.order=F, max.words = 80, col=rainbow((50)))
> save.image("E:/B.E/Final Year Project/Word Cloud Mancity.RData")