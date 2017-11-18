<?php

namespace App\Modules\Content\Controllers\Admin;

use Nova\Http\Request;

use App\Modules\Content\Models\Comment;
use App\Modules\Platform\Controllers\Admin\BaseController;


class Comments extends BaseController
{

    public function index()
    {
        $comments = Comment::with('post')->paginate(15);

        return $this->createView()
            ->shares('title', __d('content', 'Comments'))
            ->with('comments', $comments);
    }

    public function edit($id)
    {
        return $this->createView()
            ->shares('title', __d('content', 'Edit Comment'));
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
