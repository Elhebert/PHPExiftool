<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DocFlags extends AbstractTagGroup
{

  protected string $id = 'FlashPix:DocFlags';

  protected string $name = 'DocFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::WordDocument
       * line : 127639
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::WordDocument.FlashPix:DocFlags',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
