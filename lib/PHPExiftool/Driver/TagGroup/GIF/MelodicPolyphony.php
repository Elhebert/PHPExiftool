<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MelodicPolyphony extends AbstractTagGroup
{

  protected string $id = 'GIF:MelodicPolyphony';

  protected string $name = 'MelodicPolyphony';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::MIDIControl
       * line : 131288
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIF::MIDIControl.GIF:MelodicPolyphony',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
