<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">🙋 志愿者招募</h2>

      <div class="info-box" style="text-align:left;">
        <h3 style="color:#C17B5C; margin-bottom:15px;">🌱 我们需要的志愿者</h3>
        <ul style="font-size:18px; line-height:2; padding-left:20px;">
          <li>🐾 <strong>线下喂养组</strong>：定期前往合作小区投喂流浪猫，观察记录猫咪健康状况。</li>
          <li>🚗 <strong>医疗运输组</strong>：协助将需要救助的猫咪送往合作医院，有交通工具者优先。</li>
          <li>📸 <strong>宣传设计组</strong>：拍摄猫咪照片、制作领养海报、运营社交媒体账号。</li>
          <li>📝 <strong>文案编辑组</strong>：撰写救助故事、公众号推文、领养信息。</li>
        </ul>
      </div>

      <div class="info-box" style="text-align:left; background-color:#FFF5E8;">
        <h3 style="color:#C17B5C; margin-bottom:15px;">🎁 志愿者福利</h3>
        <ul style="font-size:18px; line-height:2; padding-left:20px;">
          <li>✅ 获得"猫语森林"志愿者服务证书（可加综测分）。</li>
          <li>✅ 优先参与线下猫咖交流活动，结识同城爱猫伙伴。</li>
          <li>✅ 年度优秀志愿者将获得定制文创礼包一份。</li>
          <li>✅ 可优先领养自己照顾过的猫咪（需符合领养条件）。</li>
        </ul>
      </div>

      <div class="form-box">
        <h3 style="color:#C17B5C; text-align:center; margin-bottom:20px;">📝 报名表（示例）</h3>
        <form @submit.prevent>
          <label for="vname">你的姓名：</label>
          <input type="text" id="vname" placeholder="请输入姓名" />

          <label for="vphone">联系电话：</label>
          <input type="text" id="vphone" placeholder="请输入手机号" />

          <label for="vgroup">意向组别：</label>
          <input type="text" id="vgroup" placeholder="例如：线下喂养组" />

          <label for="vmsg">自我介绍/特长：</label>
          <textarea id="vmsg" rows="4" placeholder="请简单介绍自己……"></textarea>

          <input type="submit" value="提交报名（演示）" />
          <p style="font-size:14px; color:#999; margin-top:10px;">* 当前为演示表单，正式提交请联系我们。</p>
        </form>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'
</script>
