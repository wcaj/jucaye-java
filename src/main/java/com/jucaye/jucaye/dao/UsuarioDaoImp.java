package com.jucaye.jucaye.dao;

import com.jucaye.jucaye.models.Usuario;
import de.mkammerer.argon2.Argon2;
import de.mkammerer.argon2.Argon2Factory;
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
        String query = "FROM Usuario WHERE cedula = : cedula";
        List<Usuario> lista = entityManager.createQuery(query)
                .setParameter("cedula", usuario.getCedula())
                .getResultList();

        if (lista.isEmpty()){
            return false;
        }

        String claveHashed = lista.get(0).getClave();

        Argon2 argon2 = Argon2Factory.create(Argon2Factory.Argon2Types.ARGON2id);
        return argon2.verify(claveHashed, usuario.getClave());

    }


    @Override
    public void registrar(Usuario usuario) {
        entityManager.merge(usuario);
    }




}
