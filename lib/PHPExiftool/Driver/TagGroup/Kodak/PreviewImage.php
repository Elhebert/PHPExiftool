<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{

  protected string $id = 'Kodak:PreviewImage';

  protected string $name = 'PreviewImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Scrn
       * line : 158555
       * type : undef
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Scrn.Kodak:PreviewImage',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::frea
       * line : 160662
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Kodak::frea.Kodak:PreviewImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
