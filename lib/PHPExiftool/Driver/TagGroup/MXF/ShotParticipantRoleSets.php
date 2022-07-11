<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShotParticipantRoleSets extends AbstractTagGroup
{

  protected string $id = 'MXF:ShotParticipantRoleSets';

  protected string $name = 'ShotParticipantRoleSets';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shot Participant Role Sets',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171896
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:ShotParticipantRoleSets',
      'desc' => [
        'en' => 'Shot Participant Role Sets',
      ],
    ],
  ];

}
