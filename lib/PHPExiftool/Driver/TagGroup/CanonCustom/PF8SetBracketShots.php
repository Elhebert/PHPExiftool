<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PF8SetBracketShots extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF8SetBracketShots';

  protected string $name = 'PF8SetBracketShots';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncs
       * line : 78377
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF8SetBracketShots',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
