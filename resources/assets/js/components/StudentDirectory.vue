<template>
<div class="student_directory">
    <div class="student_directory_search">
      <div class="input-group">
        <input type="text" name="search" placeholder="search user by keyword, name, training" class="form-control">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
      </div>
    </div>
    <hr>
    <div class="students">
      <div v-for="student in students" class="col-sm-4">
        <div @click="openModal(student)" class="student">
          <div class="student_heading">
            {{student.name}}
          </div>
          <div class="student_body">
            <div class="student_body_avatar">
              <img :src="student.avatar">
            </div>
            <div class="student_body_skills">
              <p class="student_body_skills_heading">Skills</p>
              <p>laravel, php, asp</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{currentStudent.name}}</h4>
        </div>
        <div class="modal-body">
          <div class="student_modal">
            <img :src="currentStudent.avatar">
            <h2>Skills</h2>
            <p>laravel, php asp</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>
              <button class="btn btn-info">Ask for Interview</button>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
  export default {
    data () {
      return {
        students: [
          {
            name: 'Polo dev',
            skills: ['php', 'laravel', 'managerial skills', 'oop'],
            avatar: `https://randomuser.me/api/portraits/men/1.jpg`
          },
          {
            name: 'Rasel Ahmed',
            skills: ['php', 'laravel', 'managerial skills', 'oop'],
            avatar: `https://randomuser.me/api/portraits/men/2.jpg`
          },

          {
            name: 'Murad Ahmed',
            skills: ['php', 'laravel', 'managerial skills', 'oop'],
            avatar: `https://randomuser.me/api/portraits/men/3.jpg`
          },

          {
            name: 'Mim Ahmed',
            skills: ['php', 'laravel', 'reactjs', 'managerial skills', 'oop'],
            avatar: `https://randomuser.me/api/portraits/men/4.jpg`
          },

          {
            name: 'Rana Ahmed',
            skills: ['php', 'laravel', 'managerial skills', 'oop'],
            avatar: `https://randomuser.me/api/portraits/men/5.jpg`
          },

          {
            name: 'Polo dev',
            skills: ['php', 'laravel', 'managerial skills', 'oop'],
            avatar: `https://randomuser.me/api/portraits/men/6.jpg`
          },
        ],
        currentStudent: {
          name: 'Murad',
          avatar: 'https://qph.ec.quoracdn.net/https://randomuser.me/api/portraits/men/7.jpg'
        }
      }
    },
    methods: {
      openModal (currentStudent) {
        this.currentStudent = currentStudent;
        $('#studentModal').modal();
      }
    }
  }
</script>
