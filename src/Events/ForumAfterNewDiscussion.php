<?php

namespace Innoboxrr\Forum\Events;

use Illuminate\Http\Request;

class ForumAfterNewDiscussion
{
    /**
     * @var Request
     */
    public $request;

    /**
     * @var Models::discussion()
     */
    public $discussion;

    /**
     * @var Models::post()
     */
    public $post;

    /**
     * Constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request, $discussion, $post)
    {
        $this->request = $request;

        $this->discussion = $discussion;

        $this->post = $post;
    }
}
