<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsIncandescent extends AbstractTagGroup
{

  protected string $id = 'Sigma:WB_RGBLevelsIncandescent';

  protected string $name = 'WB_RGBLevelsIncandescent';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::WBSettings
       * line : 339242
       * type : float
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Sigma::WBSettings.Sigma:WB_RGBLevelsIncandescent',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 2052;

}
