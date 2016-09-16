<?php
    class RepeatCounter {
        private $search_word;
        private $search_text;

        function __construct($search_word, $search_text)
        {
            $this->search_word = $search_word;
            $this->search_text = $search_text;
        }

        function getSearchWord()
        {
            return $this->search_word;
        }

        function getSearchText()
        {
            return $this->search_text;
        }

        function countRepeats()
        {
            $repeat_count = 0;
            $input1_uniform = strtolower($this->search_word);
            $input2_uniform = strtolower($this->search_text);

            $input2_exploded = explode(" ", $input2_uniform);
            foreach($input2_exploded as $potential_match)
            {
                if($input1_uniform === $potential_match)
                {
                    $repeat_count += 1;
                }
            }
            return $repeat_count;
        }
    }
 ?>
