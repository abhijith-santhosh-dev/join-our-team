## About me

1. Am Abhijith Panicker, a backend developer with experience in PHP, Laravel, and Node.js. I have worked on RESTful API development, database management with MySQL & PostgreSQL, authentication systems using JWT and Laravel Sanctum, and performance optimization techniques like caching with Redis. I also have experience integrating third-party APIs like PayPal and Google services. I’m passionate about building secure, scalable, and high-performance web applications

2. OS: Windows 11
IDE/Editor: VS Code (with extensions for PHP, Laravel, and API development)
Config Manager: Git (GitHub, GitLab, Bitbucket) for version control and collaborative development
Other Tools: Swagger for API documentation, Postman for API testing, Redis for caching, and Composer for PHP dependency management
Development Workflow: Follows Agile/Scrum methodologies, utilizes Git branching strategies (feature branching, Git Flow), and maintains clean, scalable code through best practices

3. I have installed PHP (for Laravel,Codeigniter & Core PHP development), JavaScript (for Node.js & frontend integration), and Python (for automation and learning purposes). My system also has SQL support for MySQL and PostgreSQL, and Redis for caching solutions

4. I'm currently interested in learning Python for scalable backend development and automation testing to improve code quality and efficiency. Additionally, I have a growing interest in ethical hacking and cybersecurity, which I plan to explore further

## Social Profiles 

1. GitHub: https://github.com/abhijith-santhosh-dev
2. LinkedIn: https://www.linkedin.com/in/abhijithsanthosh/
3. Portfolio: https://abhijith-santhosh-dev.github.io/my-portfolio/

## The Real Stuff

1. function getDigits($number) {
  
            $numberString = (string) $number;
            $digits = [];

   for ($i = 0; $i < strlen($numberString); $i++) {
        $digits[] = (int) $numberString[$i];
    }
    
          return $digits;
}



 2. function toPigLatin($text) {
    $words = explode(' ', $text);
    $pigLatinWords = [];

    foreach ($words as $word) {
        if (strlen($word) > 1) {
            $pigWord = substr($word, 1) . $word[0] . 'ay';
        } else {
            $pigWord = $word . 'ay'; 
        }
        $pigLatinWords[] = $pigWord;
    }

    return implode(' ', $pigLatinWords);
}

function fromPigLatin($text) {
    $words = explode(' ', $text);
    $englishWords = [];

    foreach ($words as $word) {
        if (strlen($word) > 2 && substr($word, -2) === 'ay') {
            $englishWord = substr($word, -3, 1) . substr($word, 0, -3);
        } else {
            $englishWord = $word;
        }
        $englishWords[] = $englishWord;
    }

    return implode(' ', $englishWords);
}


3. function rotateArray(&$arr, $k) {
    $k = $k % count($arr); 
    if ($k == 0) return; 
    $arr = array_merge(array_splice($arr, $k), $arr);
}

