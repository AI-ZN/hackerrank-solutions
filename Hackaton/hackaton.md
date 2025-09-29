The Hackaton problem needed a spit or wild wild imagine to solve.

Well logically , I'll say this race depends on stamin and endurance and i dont think they can finish it considering they are just 15 and 7 yrs old.

Firstly since i'm going to be using / Changing values we have to create a function with the parameters "i" and "j".

since in the problem Beck is always starting from the beginning and romeo is always placed ahead of beck to make it fair.

we first have to make sure the inputed parameter follow a rule.

Then with the "else" Statement we can start our real work.
Since the full length of our track is 6000 meteres and overall checkpoints is 1001.

Dividing the checkpoints with the track length would give us 5.99 rounded up to 6 metres which was given in the question.

For the variables u see in code $Beck_15 and $Romeo_7 are multiplied by 6 signifying .how many checkpoints they have passed or metres in the tracks.

To be able to move our runners in the code ,we must first create a counter for each of them in which the distance covered by beck is always x2 of romeo .

After we make them move then we are going to make an if statement ,checking the checkpoint they both met by comparing the value of Beck and romeo and checking if the value of beck divided by 6 is 0 .

After that we can check who Won by comparing the values of each of them with the Track .if they met or passed the track value(6000metres).

Then we can all our function and give it the parameters we want .

NOTE: $i => Beck , $j => Romeo and $i >0 ang $j must always be greater than $i


For the second problem ,since we are finding the minimum checkpoint of romeo to win the race when beck is at $i position.

we just increment by one with the position of romeo to find the checkpoint , since 6000/ 1001 = 6, we have to make sure the incrementation doesnt pass 1001.

And we can find the checkpoint, if we just make sure they didnt draw and beck did not pass the finish line before romeo .

Then we can show the position of beck and the checkpoint needed for romeo to win

--> I made two functions for the problems
---> RaceTraining Function to find the checkpoint they drew at and the Winner of the entire race.

---> RomeoWin function to find the checkpoint where romeo needs to be placed in order to win when beck is positioned somewhere.

<<<<<<< HEAD
This is my understanding and Solution of the Hackaton Problem.
=======
This is my understanding and Solution of the Hackaton Problem.
>>>>>>> ea55ec38ac8c5848f4fbdbbc4aaf5006a6a070f3
