<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Equipe
 *
 * @property int $id
 * @property string $nom
 * @property string $avatare
 * @property int $groupe_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Groupe $groupe
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Matche[] $matchesDs
 * @property-read int|null $matches_ds_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Matche[] $matchesEs
 * @property-read int|null $matches_es_count
 * @method static \Database\Factories\EquipeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe whereAvatare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe whereGroupeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipe whereUpdatedAt($value)
 */
	class Equipe extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Groupe
 *
 * @property int $id
 * @property string $nom
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Equipe[] $equipes
 * @property-read int|null $equipes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Matche[] $matches
 * @property-read int|null $matches_count
 * @method static \Database\Factories\GroupeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereUpdatedAt($value)
 */
	class Groupe extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Matche
 *
 * @property int $id
 * @property int $equipeD_id
 * @property int $equipeE_id
 * @property int|null $scoreD
 * @property int|null $scoreE
 * @property int|null $status_matche
 * @property string|null $date_matche
 * @property int|null $groupe_id
 * @property int $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Equipe $equipesD
 * @property-read \App\Models\Equipe $equipesE
 * @property-read mixed $date_publication
 * @property-read \App\Models\Groupe|null $groupe
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pronostic[] $pronosticss
 * @property-read int|null $pronosticss_count
 * @method static \Database\Factories\MatcheFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matche newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matche query()
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereDateMatche($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereEquipeDId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereEquipeEId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereGroupeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereScoreD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereScoreE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereStatusMatche($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matche whereUpdatedAt($value)
 */
	class Matche extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pronostic
 *
 * @property int $id
 * @property int|null $pronoD
 * @property int|null $pronoE
 * @property int|null $status_prono
 * @property string|null $date_prono
 * @property int $user_id
 * @property int $matche_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Matche $matche
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PronosticFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereDateProno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereMatcheId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic wherePronoD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic wherePronoE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereStatusProno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronostic whereUserId($value)
 */
	class Pronostic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeMatche
 *
 * @property int $id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TypeMatcheFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMatche whereUpdatedAt($value)
 */
	class TypeMatche extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $score
 * @property int $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pronostic[] $pronostics
 * @property-read int|null $pronostics_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\article
 *
 * @property int $id
 * @property string $nom
 * @property int $id_user
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\articleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|article query()
 * @method static \Illuminate\Database\Eloquent\Builder|article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|article whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|article whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|article whereUpdatedAt($value)
 */
	class article extends \Eloquent {}
}

