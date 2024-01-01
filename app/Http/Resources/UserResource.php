<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $follows = DB::table("follows")->select("followed_id")->where("follower_id", "=", $this->id)->get();
        $parsedFollows = [];
        foreach($follows as $follow){
            array_push($parsedFollows, $follow->followed_id);
        }
        $followers = DB::table("follows")->select("follower_id")->where("followed_id", "=", $this->id)->get();
        $parsedFollowers = [];
        foreach($followers as $follow){
            array_push($parsedFollowers, $follow->follower_id);
        }
        $postsFollowed = [];
        foreach($parsedFollows as $follow){
            $posts = DB::table("posts")->select("id", "user_id", "image", "content", "created_at")->where("user_id", "=", $follow)->get();
            foreach($posts as $post){
                array_push($postsFollowed, $post);
            }
        }
        return [
            "id" => $this->id,
            "name" => $this->name,
            "lastName1" => $this->lastName1,
            "lastName2" => $this->lastName2,
            "email" => $this->email,
            "follows" => $parsedFollows,
            "followers" => $parsedFollowers,
            "posts" => $postsFollowed,
        ];
    }
}
