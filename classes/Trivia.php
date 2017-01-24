<?php
/**
 * A section of IMDB lets you see trivia for that individual movie title
 *
 * The bits of imformation of trivia is for IMDB users to accesss and send via
 * social media on facebook.
 *
 *@author Zak Abad <zabad1@cnm.edu>
 */
class Trivia {
	/**
	 * id for trivia; this is the primary key
	 * @var int $triviaId
	 **/
	private $triviaId;
	/**
	 * id for movie; this is the foreign key
	 * @var int $movieId
	 **/
	private $movieId;
	/**
	 * written content that user can share or write for public
	 * */
	private $trivial;
	/**
	 * movie title tied to individual trivia to share
	 **/
	private $movieTitle;

	/**
	 * constructor for the trivia
	 *
	 * @param int|null $triviaId id of this trivia or null if new trivia
	 * @param int $newmovieId id of the Profile that sent this movie
	 * @param string $newtrivial string containing actual trivial data
	 * @param \Datetime|string|null $newmovietitle date is sent or null if set
	 * @throws \InvalidArgumentException if data types are not vaild
	 * @throws \RangeException if data values are out of bounds
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 **/

class Movie {
	/**
	 * id for movie; this is the primary key
	 * @var int $triviaId
	 **/
	private $movieId;
	/**
	 * id for movie; this is the foreign key
	 * @var int $movieId
	 **/
	private $authorProfileId;
	/**
	 * written content that user can share or write for public
	 * */
	private $quotes;
	/**
	 * awards entered in by production studio
	 **/
	private $awards;
	/**
	 * brief summeries of movies writen by any user with account
	 */
	private $synopsis
	/**
	 * title given by studio account holder
	 */
	private $title
	/**
	 * castCrew inputed by studio account holder
	 */
	/**
	 * constructor for the trivia
	 *
	 * @param int|null $movieId id of this movie or null if new movie id
	 * @param int $authorProfileId id of the Profile that sent this movie
	 * @param string $quotes string containing actual quotes data
	 * @param \Datetime|string|null $awards date is sent or null if set
	 * @param int| null $synopsis for the movie
	 * @param not null $title for movie
	 * @param int string $castCrew actual for data
	 * @throws \InvalidArgumentException if data types are not vaild
	 * @throws \RangeException if data values are out of bounds
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 **/

	public function setMovieId(int $newMovieId = null) {
		//base case: if the movie id is null, this is new movie without a mySQL assigned
		if($newMovieId === null) {
			$this->movieId = null;
			return;
		}
		//verify the movie id is positive
		if($newMovieId <= 0) {
			throw(new \RangeException("movie id is not positive"));
		}

		//convert and store the movie id
		$this->$newMovieId;
	}
	/**
	 * accessor method for movie id
	 *
	 * @return int value of movie id
	 **/

	public function getmovieId() {
		return ($this->movieId);
	}


	/**
	 * mutator method for movie id
	 *
	 * @param int|null $newMovieId new value of movie id
	 * @throws \RangeException if $newMovieId is not positive
	 * @throws \TypeError if $newMovieId is not an integer
	public function getTriviaId(): int {
		return ($this->triviaId);
	}

	public function setMovieTitle(int $newMovieTitle = null) {
		//base case: if movie title is null, this a new movie title without a mySQL assigned id (yet)
		if($newMovieTitle === null) {
			throw(new \RangeException("movie title is not positive"));
		}

		//convert and store the movie title
		$this->movieTitle = $newMovieTitle;
	}

	/**
	 * accessor method for movie title
	 *
	 * @return int value of movie title
	 **/

	public function getMovieTitle() {
		return ($this->movieTitle);
	}

	/**
	 * mutator method for movie title
	 *
	 * @param int $newMovieTitle new value of movie title
	 * @throws \RangeException if $newMovieTitle is not positive
	 * @throws \TypeError if $newMovieTitle is not an integer
	 **/

public function setTrivial(int $newTrivial = null) {
	//base case: if the trivial is null, this a new trivial without a mySQL assigned
	if($newTrivial === null) {
		$this->trivial = null;
		return;
	}

	//verify the trivial is positive
	if($newTrivial <= 0) {
		throw(new \RangeException("trivial is not positive"));
	}

	//convert and store the trivial
	$this->trivial = $newTrivial;
}

/**
 * accessor method for trivial profile
 *
 * @return int value of trivial
 **/

	public funtion getTrivial() {
		return($this->trivial);
}

/**
 * mutator method for trivial
 *
 * @param int|null $newTrivial new value of trivial
 * @throws \RangeException if $newTrivial is not positive
 * @throws \TypeError if $newTrivial is not an integer
 **/

public function setTriviaId (int $newTriviaId = null) {
	//base case: if the trivia id is null, this a new trivia id without a mySQL assigned
	if($newTriviaId === null) {
		$this->triviaId = null;
		return;
	}

	//verify the triviaId is positive
	if($newTriviaId <= 0) {
		throw(new \RangeException("triviaId is not positive"));
	}

	//convert and store the triviaId
	$this->triviaId = $newTriviaId;
}

/**
 * accessor method for triviaId profile
 *
 * @return int value of triviaId
 **/

public function getTriviaid() {
		return($this->triviaId);
}

/**
 * mutator method for trivia id
 *
 * @param int|null $newTriviaId new value of trivia id
 * @throws \RangeException if $newTriviaId is not positive
 * @throws \TypeError if $newTriviaId is not an integer
 **/

public function setQuotes(int $quotes = null)
		//base case: if the quotes is null, this a new quotes without a mySQL assigned (yet)
		if($newquotes === null) {
			$this->quotes = null;
			return;
		}

		//verify the quotes is positive
		if($newquotes <= 0) {
			throw (new \RangeException("quotes is not positive"));
		}

	//convert and store the quotes
	$this->quotes = $newquotes;
}
/**
 * accessor method for quotes method
 *
 * @return int value of quotes
 **/
public function getQuotes() {
	return ($this->quotes);

}

/**
 * mutator method for quotes
 *
 * @param int $newQuotes new value of quotes
 * @throws \RangeException if $newQuotes is not positive
 * @throws \TypeError if $newQuotes is not an integer
 **/

	public function setawards(int $awards = null)
		//base case: if the awards is null, this a new awards without a mySQL assigned (yet)
		if($newawards === null) {
			$this->awards = null;
			return;
		}

		//verify the awards is positive
		if($newawards <= 0) {
			throw (new \RangeException("awards is not positive"));
		}

	//convert and store the awards
	$this->awards = $newawards;
	}

/**accessor method for awards method
 *
 * @return int value of awards
**/
	public function getawards() {
		return ($this->awards);

	}

	/**
	 * mutator method for movie id
	 *
	 * @param int|null $newawards new value of awards
	 * @throws \RangeException if $newawards is not positive
	 * @throws \TypeError if $newawards is not an integer
	 *
	 **/
	public function setsynopsis(int $newsynopsis = null) {
		//base case: if the synopsis is null, this is new synopsis without a mySQL assigned
		if($newsynopsis === null) {
			$this->synopsis = null;
			return;
		}
		//verify the synopsis is positive
		if($newsynopsis <= 0) {
			throw(new \RangeException("synopsis is not positive"));
		}

		//convert and store the synopsis
		$this->$newsynopsis;
	}
	/**
	 * accessor method for synopsis
	 *
	 * @return int value of synopsis
	 **/

	public function getsynopsis(): int {
		return($this->synopsis);
	}

	/**
	 *mutator method for synopsis profile id
	 *
	 * @param int $newsynopsis new value of synopsis
	 * @throws \RangeException if $newsynopsis is not positive
	 * @throws \TypeError if $newsynopsis is not an integer
	 **/

	public function settitle(int $newtitle = null){
		//base case: if title is null, this a new title without a mySQL assigned id (yet)
		if($newtitle === null){
			throw(new \RangeException("title is not positive"));
		}

		//convert and store the movie title
		$this->title = $newtitle;
	}

	/**
	 * accessor method for title
	 *
	 * @return int value of title
	 **/

	public function gettitle() {
		return ($this->title);
	}

	/**
	 * mutator method for title
	 *
	 * @param int $newtitle new value of movie title
	 * @throws \RangeException if $newtitle is not positive
	 * @throws \TypeError if $newtitle is not an integer
	 **/

	public function setcastCrew(int $newcastCrew = null)
		//base case: if the castCrew is null, this a new castCrew without a mySQL assigned (yet)
		if($newcastCrew === null) {
			$this->castCrew = null;
			return;
		}

		//verify the castCrew is positive
		if($newcastCrew <= 0) {
				throw (new \RangeException("castCrew is not positive"));
	}

	//convert and store the castCrew
	$this->castCrew = $newcastCrew;
}
/**
 * accessor method for castCrew method
 *
 *@return int value of castCrew
 **/
public function getcastCrew() {
	return($this->castCrew);

}

/**
 * mutator method for castCrew
 *
 * @param int $newcastCrew new value of castCrew
 * @throws \RangeException if $newcastCrew is not positive
 * @throws \TypeError if $newcastCrew is not an integer
 **/

public function setMovieId(int $newMovieId = null) {
	//base case: if the movie id is null, this a new movie id without a mySQL assigned
	if($newMovieId === null) {
			$this->movieId = null;
			return;
	}

	//verify the movie id is positive
	if($newMovieId <= 0) {
			throw(new \RangeException("movie id is not positive"));
	}

	//convert and store the movie id
	$this->movieId = $newMovieId;
}

/**
 * accessor method for movie id
 *
 * @return int value of movie id
 **/

public function getMovieId() {
	return($this->movieId);
}

/**
 * mutator method for movie id
 *
 * @param int|null $newMovieId new value of movie id
 * @throws \RangeException if $newMovieId is not positive
 * @throws \TypeError if $newMovieId is not an integer
 **/

public function setAuthorProfileId(int $newAuthorId = null) {
	//base case: if the author profile id is null, this a new author profile id without a mySQL assigned
	if($newAuthorId === null) {
		this->authorId = null;
		return;
	}

	//verify the author profile id is positive
	if ($newAuthorId <= 0) {
		throw(new \RangeException("author profile id is not positivve"));
	}

	//convert and store the author profile id
	$this->authorProfileId = $newAuthorId;
}

/**
 * accessor method for author profile id
 *
 * @return int value of author profile id
 **/

public function getAuthorProfileId() {
	return($this->authorProfileId);
}

/**
 * mutator method for author profile id
 *
 * @param int|null $newAuthorProfileId new value of author profile id
 * @throws \RangeException if $newAuthorProfileId is not positive
 * @throws \TypeError if $newAuthorProfileId is not an integer
 **/
