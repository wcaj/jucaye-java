package com.jucaye.jucaye.dao;


import com.jucaye.jucaye.models.Usuario;

import java.util.List;


public interface UsusarioDao {


    void registrar(Usuario usuario);

    List<Usuario> getUsuarios();

    void eliminar(long id);

    boolean verificarCredencial(Usuario usuario);
}
