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
class PF25AFPointSel extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF25AFPointSel';

  protected string $name = 'PF25AFPointSel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncValues
       * line : 78328
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF25AFPointSel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
