<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Rawzor;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFileSize extends AbstractTagGroup
{

  protected string $id = 'Rawzor:OriginalFileSize';

  protected string $name = 'OriginalFileSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Rawzor::Main
       * line : 329607
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Rawzor::Main.Rawzor:OriginalFileSize',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
