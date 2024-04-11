package com.jucaye.jucaye.dao;

import com.jucaye.jucaye.models.Usuario;
import jakarta.persistence.EntityManager;
import jakarta.persistence.PersistenceContext;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Repository
@Transactional
public class UsuarioDaoImp implements UsuarioDao {

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
    public boolean verificarCredenciales(Usuario usuario) {
        String query = "FROM Usuario WHERE cedula = : cedula AND clave = : clave";
        List lista = entityManager.createQuery(query)
                .setParameter("cedula", usuario.getCedula())
                .setParameter("clave", usuario.getClave())
                .getResultList();
                return !lista.isEmpty();
    }


    @Override
    public void registrar(Usuario usuario) {
        entityManager.merge(usuario);
    }




}
