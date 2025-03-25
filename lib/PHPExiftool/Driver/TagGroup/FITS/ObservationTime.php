<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FITS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObservationTime extends AbstractTagGroup
{

  protected string $id = 'FITS:ObservationTime';

  protected string $name = 'ObservationTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FITS::Main
       * line : 121725
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FITS::Main.FITS:ObservationTime',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
