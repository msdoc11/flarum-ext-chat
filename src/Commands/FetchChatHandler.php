<?php
/*
 * This file is part of xelson/flarum-ext-chat
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xelson\Chat\Commands;

use Carbon\Carbon;
use Flarum\User\AssertPermissionTrait;
use Flarum\Post\PostRepository;
use Flarum\User\UserRepository;
use Flarum\Foundation\DispatchEventsTrait;
use Flarum\Foundation\Application;
use Flarum\Settings\SettingsRepositoryInterface;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Pusher;

class FetchChatHandler
{
    use DispatchEventsTrait;
    use AssertPermissionTrait;

    /**
     * @var UserRepository
     */
    protected $users;

    /**
     * @var Application
     */
    protected $app;

    /**
     * @var SettingsRepositoryInterface
     */
    protected $settings;

    /**
     * @param Dispatcher                  $events
     * @param UserRepository              $users
     * @param UploadAdapterContract       $upload
     * @param PostRepository              $posts
     * @param Application                 $app
     * @param ImageValidator              $validator
     * @param SettingsRepositoryInterface $settings
     */
    public function __construct(
        Dispatcher $events,
        UserRepository $users,
        PostRepository $posts,
        Application $app,
        SettingsRepositoryInterface $settings
    ) {
        $this->events    = $events;
        $this->users     = $users;
        $this->posts     = $posts;
        $this->app       = $app;
        $this->settings  = $settings;
    }

    /**
     * Handles the command execution.
     *
     * @param UploadImage $command
     * @return null|string
     *
     * @todo check permission
     */
    public function handle(FetchChat $command)
    {
        return $command;
    }
}
