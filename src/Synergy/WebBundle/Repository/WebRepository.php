<?php

namespace Synergy\WebBundle\Repository;

use Symfony\Component\Validator\Constraints\DateTime;

class WebRepository extends \Doctrine\ORM\EntityRepository {

    //User
    public function findUser($search, $limit, $offset) {
        $filter = "";

        if (!empty($search)) {
            $filter .= " WHERE ";
            $filter .= " u.id LIKE '%" . $search . "%' OR ";
            $filter .= " u.email LIKE '%" . $search . "%' OR ";
            $filter .= " u.username LIKE '%" . $search . "%' OR ";
            $filter .= " u.userType LIKE '%" . $search . "%' ";
        }

        $query = $this->_em->createQuery('SELECT u FROM SynergyWebBundle:User u ' . $filter)
                ->setMaxResults($limit)
                ->setFirstResult($offset);
        return $query->getResult();
    }

    public function findTotalUser($search) {
        $filter = "";

        if (!empty($search)) {
            $filter .= " WHERE ";
            $filter .= " u.id LIKE '%" . $search . "%' OR ";
            $filter .= " u.email LIKE '%" . $search . "%' OR ";
            $filter .= " u.username LIKE '%" . $search . "%' OR ";
            $filter .= " u.userType LIKE '%" . $search . "%' ";
        }

        $query = $this->_em->createQuery('SELECT distinct u FROM SynergyWebBundle:User u ' . $filter);
        return $query->getResult();
    }

    //Job
    public function findJob($country, $search, $limit, $offset) {

        $filter = "";

        if (!empty($country)) {
            if ($country != "All") {
                $filter .= " WHERE j.country='" . $country . "' ";
            }
        }

        if (!empty($search)) {
            if ($filter == "") {
                $filter .= " WHERE j.title LIKE '%" . $search . "%' ";
            } else {
                $filter .= " AND j.title LIKE '%" . $search . "%' ";
            }
        }

        $filter .= " ORDER BY j.country, j.id DESC ";

        if (empty($limit)) {
            $query = $this->_em->createQuery('SELECT j FROM SynergyWebBundle:Job j ' . $filter);
            return $query->getResult();
        } else {
            $query = $this->_em->createQuery('SELECT j FROM SynergyWebBundle:Job j ' . $filter)
                    ->setMaxResults($limit)
                    ->setFirstResult($offset);
            return $query->getResult();
        }
    }

    public function findTotalJob($country, $search) {
        $filter = "";

        if (!empty($country)) {
            $filter .= " WHERE j.country='" . $country . "' ";
        }

        if (!empty($search)) {
            $filter .= " AND j.title LIKE '%" . $search . "%' ";
        }

        $query = $this->_em->createQuery('SELECT j FROM SynergyWebBundle:Job j  ' . $filter);
        return $query->getResult();
    }

    //Job Detail
    public function findJobDetail($id) {
        if (!empty($id)) {
            $query = $this->_em->createQuery('SELECT j,jr FROM SynergyWebBundle:JobReference jr LEFT JOIN jr.job j WHERE j.id = ' . $id . ' ');
            return $query->getResult();
        } else {
            $query = $this->_em->createQuery('SELECT j,jr FROM SynergyWebBundle:JobReference jr LEFT JOIN jr.job j');
            return $query->getResult();
        }
    }

    public function findJobDetailWeb() {

//        $dateNow = date("Y-m-d");
        $query = $this->_em->createQuery("SELECT jr.id, jr.type, jr.description, j.id as job_id, j.title, j.country, j.isPublish FROM SynergyWebBundle:JobReference jr LEFT JOIN jr.job j WHERE j.isPublish = :isPublish")
                ->setParameter('isPublish', true);
        return $query->getResult();
    }

    public function findJobCountry() {
        $query = $this->_em->createQuery('SELECT DISTINCT j.country FROM SynergyWebBundle:JobReference jr LEFT JOIN jr.job j WHERE j.isPublish = :isPublish')
                ->setParameter('isPublish', true);
        return $query->getResult();
    }

}
