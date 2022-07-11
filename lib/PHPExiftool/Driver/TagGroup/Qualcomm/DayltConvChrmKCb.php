<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DayltConvChrmKCb extends AbstractTagGroup
{

  protected string $id = 'Qualcomm:DayltConvChrmKCb';

  protected string $name = 'DayltConvChrmKCb';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Daylt Conv Chrm K Cb',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Qualcomm::Main
       * line : 307645
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Qualcomm::Main.Qualcomm:DayltConvChrmKCb',
      'desc' => [
        'en' => 'Daylt Conv Chrm K Cb',
      ],
    ],
  ];

}
