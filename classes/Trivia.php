<?php
/**
 * A section of IMDB lets you see trivia for that individual movie title
 *
 * This bit of trivia is for the individual movie on IMDB.
 *
 *@author Zak Abad <zabad1@cnm.edu>
 */
class Trivia {
	/**
	 * id for trivia; this is the primary key
	 * int $triviaId
	 **/
	private $triviaId;
	/**
	 * id for movie; this is the foreign key
	 * int $movieId
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
 * @param int
 */
}
