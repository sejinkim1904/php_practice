<?php
  namespace App\Controller;

  use App\Entity\Article;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


  class ArticleController extends AbstractController {
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
      $articles = $this->getDoctrine()->getRepository(Article::Class)->findAll();

      return $this->render(
        'articles/index.html.twig',
        array('articles' => $articles)
      );
    }

    /**
     * @route("/article/save")
     */
    // public function save() {
    //   $entityManager = $this->getDoctrine()->getManager();
    //
    //   $article = new Article();
    //   $article->setTitle('Article  Three');
    //   $article->setBody('This is the body for article three');
    //
    //   $entityManager->persist($article);
    //
    //   $entityManager->flush();
    //
    //   return new Response('Saved an article with the id of'. $article->getId());
    // }
  }
