package com.jucaye.jucaye.dao;

import com.jucaye.jucaye.models.Usuario;
import jakarta.persistence.EntityManager;
import jakarta.persistence.PersistenceContext;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Repository
@Transactional
public class UsuarioDaoImp implements UsusarioDao{

    @PersistenceContext
    private EntityManager entityManager;


    @Override
    public List getUsuarios() {
        String query = "FROM Usuario";
        return entityManager.createQuery(query).getResultList();
    }

    @Override
    public void eliminar(long id) {
        Usuario usuario = entityManager.find(Usuario.class, id);
    }

    @Override
    public boolean verificarCredencial(Usuario usuario) {
        return false;
    }

    @Override
    public void registrar(Usuario usuario) {
        entityManager.merge(usuario);
    }


}
