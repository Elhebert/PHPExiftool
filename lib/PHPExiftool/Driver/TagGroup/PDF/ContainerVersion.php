<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContainerVersion extends AbstractTagGroup
{

  protected string $id = 'PDF:ContainerVersion';

  protected string $name = 'ContainerVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Container Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::AIPrivate
       * line : 264373
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::AIPrivate.PDF:ContainerVersion',
      'desc' => [
        'en' => 'Container Version',
      ],
    ],
  ];

}
