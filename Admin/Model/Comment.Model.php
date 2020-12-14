<?php
    class Comment{
        //show tat ca commment
        public function getComment(){
            $data = DB::connection()
                ->table("comments")
                ->orderby('comment_date', ORDER_BY_DESC)
                ->executeReader();
            return $data;
        }

        //duyet comment
        public function comment_confirmed($id_comment){
            return DB::connection()
            ->table("comments")
            ->where("comment_id = ?")
            ->setParams([$id_comment])
            ->update([
                'comment_status'=>1
            ])>0;

        }

        //go bo comment
        public function comment_remove($id_comment){
            return DB::connection()
            ->query('delete  from comments where comment_id = ?')
            ->setParams([$id_comment])
            ->executeNonQuery()>0;
        }
    }
?>