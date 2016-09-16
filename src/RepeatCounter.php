<?php
    class RepeatCounter {
        private $search_word;
        private $search_text;
        private $repeats;

        function __construct($search_word, $search_text)
        {
            $this->search_word = $search_word;
            $this->search_text = $search_text;
        }

        function getSearchWord()
        {
            return $this->search_word;
        }
        function setSearchWord($new_search_word)
        {
            $this->search_word = (string) $new_search_word;
        }
        function getSearchText()
        {
            return $this->search_text;
        }
        function setSearchText($new_search_text)
        {
            $this->search_text = (string) $new_search_text;
        }
        function getRepeats()
        {
            return $this->repeats;
        }
        function setRepeats($new_repeats)
        {
            $this->repeats = (string) $new_repeats;
        }

        function countRepeats()
        {
            $repeat_count = 0;
            if($this->search_word === $this->search_text)
            {
                $repeat_count += 1;
            }
            return $repeat_count;
        }
    }
 ?>
