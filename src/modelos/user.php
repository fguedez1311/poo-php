<?php
    namespace Fguedez\Poo\modelos;
    use Fguedez\Poo\utils\UUID;
?>

<?php

    class User{
        private string $id;
        private array $posts;
        private array $followers;

        public function __construct(
            private string $name,
            private string $username,
            private string $email,
            private string $password
        )
        {
            $this->id=UUID::generate();
            $this->posts=[];
            $this->followers=[];
        }
        public function getId(){
            return $this->id;
        }
        public function getUsername(){
            return $this->username;
        }

        public function publish(Post $post){
            array_push($this->posts,$post);
        }
        public function getPosts():array{
            return $this->posts;
        }
        public function getFollowers():array{
            return $this->followers;
        }
        public function showPosts(){
            foreach($this->posts as $post){
                var_dump($post->toString);
            }
        }
        private function hasFollower(User $user){
            $found=array_filter(
                $this->followers,
                fn(User $follower)=>$follower->id==$user->id
            );
            return count($found)==1;

        }
        public function addFollower(User $user){
            if (!$this->hasFollower(($user))){
                if($this->id==$user->id){
                    print_r("No te puedes agregar a ti mismo como follower \n");
                }
                else{
                    array_push($this->followers,$user);
                }
            }
            else{
                print_r("El usuario {$user->getUsername()} ya es un follower \n");
            }
           
        }
        public static function showProfile(User $user){
            $profile="Nombre: {$user->getUsername()} \n";
            $profile.="Followers: ".count($user->followers). "\n";
            $profile.="Posts: ".count($user->posts). "\n\n";
            return $profile;
        }



    }