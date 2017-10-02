<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Word;

class SearchController extends Controller
{

    /**
     * @Route("/", name="index_search")
     */
    public function showIndex()
    {
        $logger = $this->get('logger');
        $logger->info('User has opened the search page');

        $data["mode"] = "index";
        $data["words"] = null;

        return $this->render('search/form.html.twig', $data);
                                
    }


    /**
     * @Route("/search/execute", name="execute_search")
     **/
    public function showSearchResult(Request $request)
    {
        $data = [];

        $form = $this   ->createFormBuilder()
            ->add('word')
            ->getForm()
        ;

        $searchResult = [];
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            $form_data = $form->getData();

            $wordSearchString = $form_data["word"];

            $em = $this
                ->getDoctrine()
                ->getManager();

            $searchResult = $em
                ->getRepository('AppBundle:Word')
                ->getWords($wordSearchString);

        }
        $data["mode"] = "execute";
        $data["words"] = $searchResult;
        return $this->render('search/form.html.twig', $data);

    }
}