<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

declare(strict_types=1);

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * User is authenticated
     *
     * @return int
     */
    public function authenticated(): int
    {
        return 1;
    }
}
