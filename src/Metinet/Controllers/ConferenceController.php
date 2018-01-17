<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:44
 */

namespace Metinet\Controllers;

use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;

class ConferenceController
{

    public function testConference(Request $request): Response
    {
        return new Response(sprintf('<p>%s</p>', $request->getQuery()->get('name', 'Anonymous')));
    }
    public  function retrieveConferenceList(Request $request): Response
    {
        $conferences = [
            ['id' => '1','name' => 'First party','address' => 'Time Square','description' => 'party','goal' => 'remember past', 'allowedToExternalPeople' => true]
        ];
        $content = sprintf('<p>List of conferences</p>');
        foreach ($conferences as $conference) {
            $content .= sprintf('<li>%s</li>', $conference['name']);
        }

        return new Response($content);
    }
}