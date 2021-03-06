<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */
<<<<<<< HEAD
namespace Metinet\Controllers;
=======

namespace Metinet\Controllers;

>>>>>>> master
use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Core\Security\AuthenticationFailed;
use Metinet\Domain\Conferences\Email;
<<<<<<< HEAD
=======

>>>>>>> master
class SecurityController extends Controller
{
    public function login(Request $request): Response
    {
        if ($this->getAuthenticationContext()->isAccountLoggedIn()) {
<<<<<<< HEAD
            return new Response('Already logged-in !!');
        }
        if ($request->isPost()) {
            $email = $request->getRequest()->get('email');
            $password = $request->getRequest()->get('password');
=======

            return new Response('Already logged-in !!');
        }

        if ($request->isPost()) {
            $email = $request->getRequest()->get('email');
            $password = $request->getRequest()->get('password');

>>>>>>> master
            try {
                $this->controllerDependencies->getAccountAuthenticator()
                    ->authenticate(new Email($email), $password)
                ;
            } catch (AuthenticationFailed $e) {
<<<<<<< HEAD
=======

>>>>>>> master
                return new Response($this->render(
                    'loginFailed.html.php',
                    ['reason' => $e->getMessage()]
                ), 403);
            }
<<<<<<< HEAD
=======

>>>>>>> master
            return new Response($this->render(
                'successfulLogin.html.php',
                ['email' => $this->getAuthenticationContext()->getAccount()->getEmail()]
            ));
<<<<<<< HEAD
        }
=======

        }

>>>>>>> master
        return new Response($this->render('login.html.php', [
            'email' => $email ?? '',
            'password' => $password ?? ''
        ]));
    }
<<<<<<< HEAD
    public function logout(Request $request): Response
    {
        $this->getAuthenticationContext()->logout();
        return new Response('', 303, ['Location' => '/login']);
    }
    public function signUp()
    {
        return new Response($this->render('signUpForm.html.php')
        );
    }
}
=======

    public function logout(Request $request): Response
    {
        $this->getAuthenticationContext()->logout();

        return new Response('', 303, ['Location' => '/login']);
    }
}
>>>>>>> master
