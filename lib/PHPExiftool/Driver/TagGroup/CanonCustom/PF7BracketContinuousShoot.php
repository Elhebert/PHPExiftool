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
class PF7BracketContinuousShoot extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF7BracketContinuousShoot';

  protected string $name = 'PF7BracketContinuousShoot';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncs
       * line : 78374
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF7BracketContinuousShoot',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
