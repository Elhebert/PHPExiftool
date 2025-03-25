<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Stereo extends AbstractTagGroup
{

  protected string $id = 'Flash:Stereo';

  protected string $name = 'Stereo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::Meta
       * line : 124181
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Meta.Flash:Stereo',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
