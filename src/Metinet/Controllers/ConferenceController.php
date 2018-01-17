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
            ['id' => '1','name' => 'Gang of New York','address' => 'New York','description' => 'Charity','goal' => 'Be poor', 'allowedToExternalPeople' => true],
            ['id' => '2','name' => 'From Paris with love','address' => 'Paris ','description' => 'Money','goal' => 'Be rich', 'allowedToExternalPeople' => false]
        ];
        $content = sprintf('<h1>List of conferences</h1>');
        $number = 1;
        foreach ($conferences as $conference) {
            $content .= sprintf('<ul>');
            $content .= sprintf('<h2>Conference number '.$number.' : </h2>');
            $content .= sprintf(' <li style="list-style: none;">Name : %s</li>', $conference['name']);
            $content .= sprintf(' <li style="list-style: none;">Address : %s</li>', $conference['address']);
            $content .= sprintf(' <li style="list-style: none;">Description : %s</li>', $conference['description']);
            $content .= sprintf(' <li style="list-style: none;">Goal : %s</li>', $conference['goal']);
            $content .= sprintf('</ul>');
            $number += 1;
        }

        return new Response($content);
    }
}