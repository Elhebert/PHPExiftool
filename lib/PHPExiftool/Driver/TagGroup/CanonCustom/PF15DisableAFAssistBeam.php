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
class PF15DisableAFAssistBeam extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF15DisableAFAssistBeam';

  protected string $name = 'PF15DisableAFAssistBeam';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncs
       * line : 78392
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF15DisableAFAssistBeam',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
