<?php

namespace DersBundle\Controller;

use DersBundle\Entity\Ders;
use DersBundle\Entity\Konu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DersBundle:Default:index.html.twig');
    }


    /**
     * @Route("ders-listele", name="ders-listele")
     */
    public function DersListeleAction()
    {
        $em=$this->getDoctrine()->getManager();
        $tum_dersler=$em->getRepository('DersBundle:Ders')->findAll();
        return  $this->render("DersBundle:Default:listele.html.twig", array('dersler'=>$tum_dersler));

    }


    /**
     * @Route("ders-detay/{id}", name="ders-detay")
     */
    public function DersDetayAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $ders=$em->getRepository('DersBundle:Ders')->findOneBy(array('id'=>$id));
        return  $this->render("DersBundle:Default:dersdetay.html.twig", array('ders'=>$ders));

    }


    /**
     * @Route("ders-ekle", name="ders-ekle")
     */
    public function DersEkleAction(Request $request)
    {

        $baslik=$request->request->get("baslik");

        $yeni_ders=new Ders();
        $yeni_ders->setBaslik($baslik);

        $em=$this->getDoctrine()->getManager();
       $em->persist($yeni_ders);
        $em->flush();


        return $this->redirect($this->generateUrl('ders-listele'));

    }



    /**
     * @Route("konu-ekle", name="konu-ekle")
     */
    public function konuEkleAction(Request $request)
    {
/*
 * posttan gelen veriler
 */
       $baslik=$request->request->get("baslik");
        $ders_id=$request->request->get("ders_id");

        /*
         * Doctrine Yardimcisini Cagiralim
         */
        $em=$this->getDoctrine()->getManager();
        /*
         * Ders id si ders_id olan nesneyi bulalim
         */
        $ders=$em->getRepository('DersBundle:Ders')->findOneBy(array('id'=>$ders_id));

        /*
         * Yeni konu ekleyelim
         */
        $yeni_konu=new Konu();
        $yeni_konu->setBaslik($baslik);
        $yeni_konu->setDers($ders);

        $em->persist($yeni_konu);
        $em->flush();

        /*
         * ilgili ders detaya gidelim
         */

        return $this->redirect($this->generateUrl('ders-detay', array('id'=>$ders->getid())));
    }


    /**
     * @Route("konu-sil/{id}", name="konu-sil")
     */
    public function KonuSil($id){

        /*
         * Doctrine yardimcisini cagiralim
         */

        $em=$this->getDoctrine()->getManager();

        /*
         * Konu nesnesini bulkalim
         */

        $konu=$em->getRepository('DersBundle:Konu')->findOneBy(array('id'=>$id));

        $em->remove($konu);
        $em->flush();

        //id'=>$konu->getders()->getid()  konu nesnesinden derse cik ordan id yi al.
        return $this->redirect($this->generateUrl('ders-detay', array('id'=>$konu->getders()->getid())));
    }


    /**
     * @Route("ders-sil/{id}", name="ders-sil")
     */
    public function DersSilAction($id){
        /*
         * Doctrine yardimcimizi cagiralim
         */
        $em=$this->getDoctrine()->getManager();

        /*
         * Ders nesnesini bulalim
         */

        $ders=$em->getRepository('DersBundle:Ders')->findOneBy(array('id'=>$id));

        $em->remove($ders);
        $em->flush();

        return $this->redirect($this->generateUrl('ders-listele'));
    }
}


